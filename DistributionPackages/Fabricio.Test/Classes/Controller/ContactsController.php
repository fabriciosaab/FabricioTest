<?php
namespace Fabricio\Test\Controller;

/*
 * This file is part of the Fabricio.Test package.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;
use Fabricio\Test\Domain\Model\Contacts;

class ContactsController extends ActionController
{


    /**
     * @Flow\Inject
     * @var \Fabricio\Test\Domain\Repository\ContactsRepository
     */
    protected $contactsRepository;

    /**
     * @return void
     */
    public function indexAction()
    {
        $this->view->assign('contacts', $this->contactsRepository->findAll());
    }

    /**
     * @param \Fabricio\Test\Domain\Model\Contacts $contacts
     * @return void
     */
    public function showAction(Contacts $contacts)
    {
        $this->view->assign('contacts', $contacts);
    }

    /**
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * @param \Fabricio\Test\Domain\Model\Contacts $newContacts
     * @return void
     */
    public function createAction(Contacts $newContacts)
    {
        $this->contactsRepository->add($newContacts);
        $this->addFlashMessage('Created a new contacts.');
        $this->redirect('index');
    }

    /**
     * @param \Fabricio\Test\Domain\Model\Contacts $contacts
     * @return void
     */
    public function editAction(Contacts $contacts)
    {
        $this->view->assign('contacts', $contacts);
    }

    /**
     * @param \Fabricio\Test\Domain\Model\Contacts $contacts
     * @return void
     */
    public function updateAction(Contacts $contacts)
    {
        $this->contactsRepository->update($contacts);
        $this->addFlashMessage('Updated the contacts.');
        $this->redirect('index');
    }

    /**
     * @param \Fabricio\Test\Domain\Model\Contacts $contacts
     * @return void
     */
    public function deleteAction(Contacts $contacts)
    {
        $this->contactsRepository->remove($contacts);
        $this->addFlashMessage('Deleted a contacts.');
        $this->redirect('index');
    }
}
