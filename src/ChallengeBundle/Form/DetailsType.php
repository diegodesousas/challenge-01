<?php

namespace ChallengeBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetailsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rg')
            ->add('expeditionDate', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'invalid_message' => 'Formato de data inválido. (Ex: 24/11/1987)'
            ))
            ->add('shiiper')
            ->add('company')
            ->add('profession')
            ->add('income')
            ->add('maritalStatus', EntityType::class, array(
                'class' => 'ChallengeBundle:MaritalStatus',
            ))
            ->add('category', EntityType::class, array(
                'class' => 'ChallengeBundle:Category',
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ChallengeBundle\Entity\Details',
            'csrf_protection' => false,
            'allow_extra_fields' => true
        ));
    }
}
