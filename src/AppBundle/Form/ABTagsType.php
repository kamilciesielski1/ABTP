<?php
/**
 * Created by PhpStorm.
 * User: kciesielski
 * Date: 08.09.17
 * Time: 19:54
 */

namespace AppBundle\Form;

use AppBundle\Entity\AB\ABTags;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ABTagsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ABTags::class,
        ));
    }
}