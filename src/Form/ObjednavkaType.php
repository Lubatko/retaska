<?php

namespace App\Form;

use App\Entity\Objednavka;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObjednavkaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('PocetKusu')
            ->add('Email')
            ->add('telefon')
            ->add('Jmeno')
            ->add('Adresa')
            ->add('Mesto')
            ->add('PSC')
            ->add('Zeme')
            ->add('DOprava')
            ->add('Platba')
            ->add('Poznamka')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Objednavka::class,
        ]);
    }
}
