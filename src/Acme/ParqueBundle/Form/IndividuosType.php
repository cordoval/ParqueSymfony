<?php

namespace Acme\ParqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class IndividuosType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('plantacion','date')
            ->add('coordx')
            ->add('coordy')
            ->add('especie')
            ->add('foto')
        ;
    }

    public function getName()
    {
        return 'acme_parquebundle_individuostype';
    }
}
