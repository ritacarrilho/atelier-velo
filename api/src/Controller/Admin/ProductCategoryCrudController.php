<?php

namespace App\Controller\Admin;

use App\Entity\ProductCategory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;

class ProductCategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductCategory::class;
    }

    /* change crud page title */
    public function configureCrud(Crud $crud): Crud
    {
    return $crud
    // Entity label
        ->setEntityLabelInSingular('Categorie de produits')
        ->setEntityLabelInPlural('Categories de produits')
    // Pages titles
        ->setPageTitle('index', 'Catégorie de Produits')
        ->setPageTitle('detail', fn (ProductCategory $prod_category) => (string) $prod_category)
        ->setPageTitle('edit', fn (ProductCategory $prod_category) => sprintf($prod_category->getLabel()))
    // Sort order
        ->setDefaultSort(['id' => 'ASC'])
    // Elements per page
        ->setPaginatorPageSize(10)
        ->setPaginatorRangeSize(4);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('label', 'Categorie'),
        ];
    }
    
    /* Change actions */
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $action) {
                return $action->setLabel('Ajouter Catégorie de Produit')->addCssClass('btn btn-success');
            })
            ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
                return $action->setLabel('Effacer')->setCssClass('text-danger action-delete');
            })
            ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $action) {
                return $action->setLabel('Éditer')->setCssClass('text-warning');
            })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function (Action $action) {
                return $action->setLabel('Enregistrer et continuer l\'édition');
            })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function (Action $action) {
                return $action->setLabel('Enregistrer');
            });
    }
}
