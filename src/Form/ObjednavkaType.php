<?php

namespace App\Form;

use App\Entity\Objednavka;
use App\Entity\Zeme;
use App\Entity\Doprava;
use App\Entity\Platba;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ObjednavkaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('PocetKusu', class: integer)
            ->add('Email')
            ->add('telefon')
            ->add('Jmeno')
            ->add('Adresa')
            ->add('Mesto')
            ->add('PSC')
            ->add('Zeme', EntityType::class, [
                'class' => Zeme::class, 
                'choice_label' => 'Nazev'
            ])
            ->add('Doprava', EntityType::class, [
                'class' => Doprava::class, 
                'choice_label' => 'Nazev'
            ])
            ->add('Platba', EntityType::class, [
                'class' => Platba::class, 
                'choice_label' => 'Nazev'
            ])
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
