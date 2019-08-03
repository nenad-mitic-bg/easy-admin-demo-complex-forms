<?php

namespace App\Form;

use App\Entity\StreetAddress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Country;
use Symfony\Component\Validator\Constraints\NotBlank;

class StreetAddressType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('line1', TextType::class, [
                    'label' => 'Address line one',
                    'constraints' => new NotBlank()
                ])
                ->add('line2', TextType::class, [
                    'label' => 'Address line two'
                ])
                ->add('postCode', TextType::class, [
                    'label' => 'Post code',
                    'constraints' => new NotBlank()
                ])
                ->add('city', TextType::class, [
                    'label' => 'City',
                    'constraints' => new NotBlank()
                ])
                ->add('country', CountryType::class, [
                    'label' => 'Country',
                    'constraints' => [
                        new NotBlank(),
                        new Country()
                    ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label' => false,
            'data_class' => StreetAddress::class,
        ]);
    }

}
