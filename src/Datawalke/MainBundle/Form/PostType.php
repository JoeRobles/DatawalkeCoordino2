<?php

namespace Datawalke\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('related')
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
            ->add('tag')
            ->add('flags')
            ->add('notify')
            ->add('user')
            ->add('tags')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Datawalke\MainBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'datawalke_mainbundle_post';
    }
}
