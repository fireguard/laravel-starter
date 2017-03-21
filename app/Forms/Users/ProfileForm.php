<?php

/*
 * This file is part of the fireguard/form package.
 *
 * (c) Ronaldo Meneguite <ronaldo@fireguard.com.br>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Forms\Users;


use App\Forms\FormInterface;
use Fireguard\Form\Contracts\FormModelInterface;
use Fireguard\Form\Elements\ButtonElement;
use Fireguard\Form\Elements\EmailElement;
use Fireguard\Form\Elements\ImageElement;
use Fireguard\Form\Elements\TextElement;
use Fireguard\Form\FormBuilder;

class ProfileForm implements FormInterface
{
    public static function create(FormModelInterface $model = null, array $options = [])
    {

        return FormBuilder::create($model, $options)
            ->setToken(csrf_token())
            ->openRow()
            ->addGroup('image-group', [
                ['image', ImageElement::class, ['grid' => 'col-xs-12', 'value' => 'ola']],
            ], ['grid' => 'col-xs-12 col-sm-3'])
            ->addGroup('base', [
                ['name', TextElement::class, [ 'label' => 'Name', 'grid' => 'col-xs-12', 'required' => true ]],
                ['email', EmailElement::class, ['label' => 'E-mail', 'grid' => 'col-xs-12', 'required' => true ]],
                ['function', TextElement::class, [ 'label' => 'Função', 'grid' => 'col-xs-12' ]],
            ], ['class'=> 'row', 'grid' => 'col-xs-12 col-sm-9'])
            ->closeRow()
            ->openRow()
            ->addGroup('footer-buttons', [
                ['save', ButtonElement::class, [
                    'label' => 'Salvar', 'icon' => 'fa-save', 'type'=> 'submit', 'theme' => 'primary'
                ]],
                ['cancel', ButtonElement::class, [
                    'label' => 'Cancelar',
                    'icon' => 'fa-close',
                    'theme' => 'danger',
                    'href' => '#',
                    'data-dismiss' => 'modal',
                    'aria-hidden' => 'true'
                ]],
            ], ['class' => 'footer', 'grid' => 'col-xs-12'])
            ->closeRow();
    }
}
