<?php

/*
 * This file is part of the fireguard/laravel-starter package.
 *
 * (c) Ronaldo Meneguite <ronaldo@fireguard.com.br>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Services;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class UserService
{

    /**
     * @var array
     */
    protected $filesForRemove = [];

    public function getListForUsers(Request $request)
    {
        if (!empty($request->input('search'))) {
            return $this->getUsersForSearch($request->input('search'));
        }
        return User::orderBy('id', 'desc')->paginate(10);
    }

    public function create(Request $request)
    {
        $user = User::create($request->all());
        $user->fill($request->all());
        $user->password = bcrypt($request->input('password'));
        $user->image = $this->getImageForUser($request, $user);
        if ( $user->save() ) {
            $this->removeFiles($this->filesForRemove);
            return $user;
        }
        return null;
    }

    public function update(Request $request, User $user)
    {
        $user->fill($request->all());
        $user->image = $this->getImageForUser($request, $user);
        if ( $user->save() ) {
            $this->removeFiles($this->filesForRemove);
            return true;
        }
        return false;
    }

    public function remove($id)
    {
        if (\Auth::user()->id == $id) {
            return response()->json(['status' => 'error', 'message' => 'Não é possível remover o próprio usuário'], 402);
        }

        return User::destroy($id);
    }

    protected function getUsersForSearch($search)
    {
        return User::where('id', '=', $search)
            ->orWhere('name', 'LIKE', '%'.$search.'%')
            ->orWhere('email', 'LIKE', '%'.$search.'%')
            ->orWhere('function', 'LIKE', '%'.$search.'%')
            ->orderBy('id', 'desc')
            ->paginate(10);
    }

    protected function removeFiles($files)
    {
        foreach ($files as $file) {
            @\Storage::delete($file);
        }
    }

    protected function getImageForUser(Request $request, $user)
    {
        try {
            $image = $request->file('image');
            if(!empty($image) && $image instanceof UploadedFile ) {
                $fileExtension = $image->getClientOriginalExtension();
                $path = 'users/'.$user->id.'/'.sha1($image->getFilename()).'.'.$fileExtension;

                $imageFinally = \Image::make($image)->resize(200, 200);
                $imageFinally->encode('jpg');
                if ( \Storage::put($path, $imageFinally) ) {
                    $this->filesForRemove[] = $user->image;
                    return $path;
                }
            }
        }catch (\Exception $e){}
        return $user->image;
    }

}
