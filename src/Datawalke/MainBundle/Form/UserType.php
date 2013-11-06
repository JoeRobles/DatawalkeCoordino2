<?php

namespace Datawalke\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('urlTitle')
            ->add('joined')
            ->add('publicKey')
            ->add('registered')
            ->add('reputation')
            ->add('website')
            ->add('location')
            ->add('age')
            ->add('info')
            ->add('permission')
            ->add('ip')
            ->add('answerCount')
            ->add('commentCount')
            ->add('questionCoununt')
            ->add('image')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Datawalke\MainBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'datawalke_mainbundle_user';
    }
}
