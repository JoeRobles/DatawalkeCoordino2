<?php

namespace Datawalke\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostRevType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('related')
            ->add('versionCreated')
            ->add('type')
            ->add('title')
            ->add('content')
            ->add('status')
            ->add('timestamp')
            ->add('lastEditedTimestamp')
            ->add('votes')
            ->add('urlTitle')
            ->add('publicKey')
            ->add('views')
            ->add('tags')
            ->add('flags')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Datawalke\MainBundle\Entity\PostRev'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'datawalke_mainbundle_postrev';
    }
}
