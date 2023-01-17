<?php

namespace App\Form;

use App\Entity\Gite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\TextType;




class GiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adress', TextType::class, [
                'required' => true,
                'label' => 'Adresse'
            ])
            ->add('city', CitiesAutocompleteField::class
            )
            ->add('department', DepartmentsAutocompleteField::class
            )
            ->add('region', RegionsAutocompleteField::class
            )
            ->add('surface')
            ->add('link_picture', FileType::class, [
                'label' => 'Photo (jpg, png)',
                'constraints' => [
                    new File([
                        'maxSize' => '3000k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/jpg',
                            'image/pjpeg',
                            'image/png',
                            'image/x-png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => "Veuillez selectionner un format d'image valide.",
                    ])
                ],
            ])
            ->add('rooms', TextType::class, [
                'required' => true,
                'label' => 'Nombre de chambres'
            ])
            ->add('beds', TextType::class, [
                'required' => true,
                'label' => 'Nombre de couchage'
            ])
            ->add('base_price', TextType::class, [
                'required' => true,
                'label' => 'Prix de base'
            ])
            ->add('id_price_period', TextType::class, [
                'required' => true,
                'label' => "Période de l'année"
            ])
            ->add('id_pets', TextType::class, [
                'required' => true,
                'label' => 'Animaux acceptés'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gite::class,
        ]);
    }
}
