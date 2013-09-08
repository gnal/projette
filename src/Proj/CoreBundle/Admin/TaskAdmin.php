<?php

namespace Proj\CoreBundle\Admin;

use Msi\AdminBundle\Admin\Admin;
use Msi\AdminBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class TaskAdmin extends Admin
{
    public function buildGrid(GridBuilder $builder)
    {
        $builder
            ->add('done', 'boolean', [
                'btn_false' => 'label-danger',
            ])
            ->add('title')
            ->add('', 'action')
        ;
    }

    public function buildForm(FormBuilder $builder)
    {
        $builder
            ->add('title')
            ->add('description', 'textarea')
        ;
    }
}
