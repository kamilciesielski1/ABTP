<?php
/**
 * Created by PhpStorm.
 * User: kamilciesielski1
 * Date: 05.09.17
 * Time: 11:25
 */

namespace AppBundle\Form;

use AppBundle\Entity\Tags;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Tags::class,
        ));
    }
}