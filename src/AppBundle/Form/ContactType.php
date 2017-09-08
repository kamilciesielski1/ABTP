<?php

namespace AppBundle\Form;

use AppBundle\Entity\AB\Contact;
use AppBundle\Entity\AB\ABTags;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');

        $builder->add('lastName');

        $builder->add('description');

        $builder->add('address', AddressType::class);

        $builder->add('email', EmailType::class);

        $builder->add('telephone', TelephoneType::class);

        $builder->add('abtags', CollectionType::class, array(
            'entry_type' => ABTagsType::class,
            //'entry_options' => array('label' => false),
            'allow_add' => true,
            'allow_delete' => true,
            'by_reference' => false,
            'label' => false
        ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Contact::class,
        ));
    }
}