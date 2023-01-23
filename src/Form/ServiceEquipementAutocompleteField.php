<?php

namespace App\Form;

use App\Entity\ServiceEquipement;
use Symfony\Component\Form\AbstractType;
use Symfony\UX\Autocomplete\Form\AsEntityAutocompleteField;
use App\Repository\ServiceEquipementRepository;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\Autocomplete\Form\ParentEntityAutocompleteType;

#[AsEntityAutocompleteField]
class ServiceEquipementAutocompleteField extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'class' => ServiceEquipement::class,
            'label' => 'Services',
            'choice_label' => 'name',
            'multiple' => true,
            //'constraints' => [
            //    new Count(min: 1, minMessage: 'We need to eat *something*'),
            //],
            'filter_query' => function(QueryBuilder $qb, string $query, ServiceEquipementRepository $repository) {
                if (!$query) {
                    return;
                }

                $qb->andWhere('entity.name LIKE :filter OR entity.price LIKE :filter')
                    ->setParameter('filter', '%'.$query.'%');
            }

        ]);
    }
    public function getParent(): string
    {
        return ParentEntityAutocompleteType::class;
    }

}