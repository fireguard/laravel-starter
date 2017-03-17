<?php

/*
 * This file is part of the fireguard/laravel-starter package.
 *
 * (c) Ronaldo Meneguite <ronaldo@fireguard.com.br>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Forms\Example;


use Fireguard\Form\Elements\ButtonElement;
use Fireguard\Form\Elements\CheckBoxElement;
use Fireguard\Form\Elements\DateElement;
use Fireguard\Form\Elements\EmailElement;
use Fireguard\Form\Elements\FileElement;
use Fireguard\Form\Elements\ImageElement;
use Fireguard\Form\Elements\NumberElement;
use Fireguard\Form\Elements\PasswordElement;
use Fireguard\Form\Elements\SelectElement;
use Fireguard\Form\Elements\TextAreaElement;
use Fireguard\Form\Elements\TextElement;
use Fireguard\Form\Form;

class ExampleForm
{
    public static function getForm($model = null, array $options = [])
    {
        return (new Form($model , $options))
            ->setToken('asdasdas')
            ->openRow()
            ->addGroup('base', [
                ['name', TextElement::class, [
                    'label' => 'Name',
                    'help' => 'Aqui entra um texto de esclarecimento que pode ser tão grande quando o necessário',
                    'help-placement' => 'right',
                    'help-title' => 'Text for Title',
                    'grid' => 'col-xs-12',
                    'required' => true
                ]],
                ['phone-mask', TextElement::class, [
                    'label' => 'Phone - Mask with DDD',
                    'grid' => 'col-xs-12 col-sm-6',
                    'required' => true,
                    'mask' =>  '(00) 0000-0000'
                ]],
                ['value-mask', TextElement::class, [
                    'label' => 'Value - Mask Reverse',
                    'grid' => 'col-xs-12 col-sm-6',
                    'required' => true,
                    'mask' =>  '#.##0,00',
                    'mask-reverse' => true
                ]],
                ['password', PasswordElement::class, [
                    'label' => 'Password',
                    'grid' => 'col-xs-12 col-sm-6',
                ]],
                ['number', NumberElement::class, [
                    'label' => 'Number',
                    'grid' => 'col-xs-12 col-sm-6',
                ]],

            ], ['class'=> 'row', 'grid' => 'col-xs-12 col-sm-9 col-md-10'])
            ->addGroup('image-group', [
                ['image', ImageElement::class, [
                    'grid' => 'col-xs-12',
                    'required' => true
                ]],
            ], ['class'=> 'row', 'grid' => 'col-xs-12 col-sm-3 col-md-2'])
            ->closeRow()->openRow()
            ->addElement('email', EmailElement::class, [
                'label' => 'Email',
                'grid' => 'col-xs-12 col-sm-4'
            ])
            ->addElement('email-required', EmailElement::class, [
                'label' => 'Email',
                'grid' => 'col-xs-12 col-sm-4',
                'required' => true
            ])
            ->addElement('email-danger', EmailElement::class, [
                'label' => 'Email',
                'grid' => 'col-xs-12 col-sm-4',
                'danger' => true
            ])
            ->addElement('date-input', DateElement::class, [
                'label' => 'Date',
                'grid' => 'col-xs-12 col-sm-4',
            ])
            ->addElement('date-input-required', DateElement::class, [
                'label' => 'Date Required',
                'grid' => 'col-xs-12 col-sm-4',
                'required' => true
            ])
            ->addElement('date-input-danger', DateElement::class, [
                'label' => 'Date Danger',
                'grid' => 'col-xs-12 col-sm-4',
                'danger' => true
            ])

            ->addElement('select', SelectElement::class, [
                'label' => 'Select',
                'grid' => 'col-xs-12 col-sm-4',
                'options' => [1 => 'Option 1', 2 => 'Option 2', 3 => 'Option 3'],
            ])

            ->addElement('select-required', SelectElement::class, [
                'label' => 'Select Required',
                'grid' => 'col-xs-12 col-sm-4',
                'options' => [1 => 'Option 1', 2 => 'Option 2', 3 => 'Option 3'],
                'required' => true
            ])

            ->addElement('select-multiple', SelectElement::class, [
                'label' => 'Select Multiple',
                'grid' => 'col-xs-12 col-sm-4',
                'options' => [1 => 'Option 1', 2 => 'Option 2', 3 => 'Option 3'],
                'danger' => true,
                'multiple' => true
            ])

            ->addElement('text-area', TextAreaElement::class, [
                'label' => 'Text Area',
                'grid' => 'col-xs-12 col-sm-4',
                'rows' => '4'
            ])
            ->addElement('text-area-required', TextAreaElement::class, [
                'label' => 'Text Area Required',
                'grid' => 'col-xs-12 col-sm-4',
                'rows' => '4',
                'required' => true,
            ])
            ->addElement('text-area-danger', TextAreaElement::class, [
                'label' => 'Text Area Required',
                'grid' => 'col-xs-12 col-sm-4',
                'rows' => '4',
                'danger' => true,
            ])

            ->addElement('file-input', FileElement::class, [
                'label' => 'File',
                'grid' => 'col-xs-12 col-sm-4',
                'multiple' => true
            ])
            ->addElement('file-input-required', FileElement::class, [
                'label' => 'File Required',
                'grid' => 'col-xs-12 col-sm-4',
                'required' => true,
            ])
            ->addElement('file-input-danger', FileElement::class, [
                'label' => 'File Danger',
                'grid' => 'col-xs-12 col-sm-4',
                'danger' => true,
            ])


            ->addGroup('group-test', [
                ['checkbox1', CheckBoxElement::class, ['label' => 'Check1'], true],
                ['checkbox2', CheckBoxElement::class, ['label' => 'Check2']],
                ['checkbox3', CheckBoxElement::class, ['label' => 'Check3']],
            ], ['label' => 'Name for Group', 'grid' => 'col-xs-12 col-sm-6'])

            ->addGroup('inline-group-test', [
                ['checkbox1', CheckBoxElement::class, ['label' => 'Check1', 'inline' => true], true],
                ['checkbox2', CheckBoxElement::class, ['label' => 'Check2', 'inline' => true]],
                ['checkbox3', CheckBoxElement::class, ['label' => 'Check3', 'inline' => true, 'danger' => true]],
            ], ['label' => 'Name for Group', 'grid' => 'col-xs-12 col-sm-6'])

            ->addGroup('footer-buttons', [
                ['send', ButtonElement::class, [
                    'label' => 'Primary', 'icon' => 'fa-save', 'type'=> 'submit', 'theme' => 'primary'
                ]],
                ['send', ButtonElement::class, [
                    'label' => 'Info', 'icon' => 'fa-info-circle', 'type'=> 'submit', 'theme' => 'info'
                ]],
                ['send', ButtonElement::class, [
                    'label' => 'Success', 'icon' => 'fa-check', 'type'=> 'submit', 'theme' => 'success'
                ]],
                ['send', ButtonElement::class, [
                    'label' => 'Warning', 'icon' => 'fa-exclamation-circle', 'type'=> 'submit', 'theme' => 'warning'
                ]],
                ['send', ButtonElement::class, [
                    'label' => 'Link', 'icon' => 'fa-link', 'type'=> 'submit', 'theme' => 'link'
                ]],
                ['cancel', ButtonElement::class, [
                    'label' => 'Danger', 'icon' => 'fa-close', 'danger' => true, 'href' => '/',
                ]],
            ], ['class' => 'footer', 'grid' => 'col-xs-12'])
            ->closeRow()
        ;
    }
}
