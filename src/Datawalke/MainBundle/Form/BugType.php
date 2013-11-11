<?php

namespace Datawalke\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BugType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content')
            ->add('status', 'choice', array(
                'choices'   => array(
                    'open'   => 'Open',
                    'closed' => 'Closed',
                    'invalid'   => 'Invalid',
                ),
            ))
            ->add('submitted')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Datawalke\MainBundle\Entity\Bug'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'datawalke_mainbundle_bug';
    }
}
