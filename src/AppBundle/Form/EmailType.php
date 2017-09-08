<?php
/**
 * Created by PhpStorm.
 * User: kciesielski
 * Date: 08.09.17
 * Time: 18:34
 */

namespace AppBundle\Form;

use AppBundle\Entity\AB\Email;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email');

        $builder->add('email2');

        $builder->add('workEmail');

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Email::class,
        ));
    }
}