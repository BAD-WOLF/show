<?php
// src/Form/LoginType.php

namespace App\Form;

use App\Entity\Login;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description', TextType::class, [
                'label' => 'Descrição: ',
                'attr' => [
                    'placeholder' => 'Digite a descrição aqui...',
                ],
            ])
            ->add('name', TextType::class, [
                'label' => 'Nome: ',
                'attr' => [
                    'placeholder' => 'Digite o nome aqui...'
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email: ',
                'attr' => [
                    'placeholder' => 'Digite o email aqui...'
                ],
            ])
            ->add('passwd', PasswordType::class, [
                'label' => 'Senha: ',
                'attr' => [
                    'placeholder' => 'Digite a senha aqui...'
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enviar',
                'attr' => ['class' => 'btn btn-primary']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Login::class,
        ]);
    }
}

