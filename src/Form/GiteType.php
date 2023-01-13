<?php

namespace App\Form;

use App\Entity\Gite;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adress')
            ->add('id_cities')
            ->add('surface')
            ->add('link_picture')
            ->add('rooms')
            ->add('beds')
            ->add('base_price')
            ->add('total_price')
            ->add('id_service')
            ->add('id_equipement')
            ->add('id_price_period')
            ->add('id_pets')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gite::class,
        ]);
    }
}
