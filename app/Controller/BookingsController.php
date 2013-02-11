<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Bookings Controller
 *
 * @property Booking $Booking
 */
class BookingsController extends AppController {

    public function isAuthorized($user) {
    if ($this->action === 'add') {
        return true;
    }

    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $postId = $this->request->params['pass'][0];
        if ($this->Booking->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}
    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Booking->recursive = 0;
        $bookingDates = $this->Booking->find('all');//, array(
        foreach($bookingDates as $bDate )
        {
                $bDate['Booking']['booking_date'] = date('Y m d', strtotime($bDate['Booking']['booking_date']));
                $newArr[$bDate['Booking']['booking_date']] = $bDate;
        }
        $this->set('user_id', $this->Auth->user('id'));
        $this->set('group_id', $this->Auth->user('group_id'));
        $this->set('bookingDates', $newArr);
        $this->set('bookings', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Booking->id = $this->params['pass'][4];
        if (!$this->Booking->exists()) {
            throw new NotFoundException(__('Invalid booking'));
        }
        //$user_id = $this->Auth->user('id');
        //echo "<pre>" ; print_r($this->Auth->user); echo "</pre>";exit;
        $this->set('user_id', $this->Auth->user('id'));
        $this->set('booking', $this->Booking->read(null, $this->params['pass'][4]));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
//            $month = 'April';
//            echo date('m', strtotime($month));exit;
            $this->request->data['Booking']['booking_date']['day'] = $this->params['pass'][1] ;
            $this->request->data['Booking']['booking_date']['month'] = date('m', strtotime($this->params['pass'][2])) ;
            $this->request->data['Booking']['booking_date']['year'] = $this->params['pass'][3] ;
            $this->request->data['Booking']['user_id'] = $this->params['pass'][0] ;
//            echo "<pre>" ; print_r($this->request->data); echo "</pre>";exit;
            $this->Booking->create();
            if ($this->Booking->save($this->request->data)) {
                $this->Session->setFlash(__('The booking has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The booking could not be saved. Please, try again.'));
            }
        }
        $test_date = getdate(); 
        $test_date['mday'] = $this->params['pass'][1] ;
        //echo "<pre>" ; print_r($test_date); echo "</pre>";exit;
        //$users = $this->Booking->User->find('list');
        $id_and_date = $this->params['pass'];
        $cars = $this->Booking->Car->find('list');
        $this->set(compact('cars','id_and_date','test_date'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Booking->id = $id;
        if (!$this->Booking->exists()) {
            throw new NotFoundException(__('Invalid booking'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Booking->save($this->request->data)) {
                $this->Session->setFlash(__('The booking has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The booking could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Booking->read(null, $id);
        }
        $users = $this->Booking->User->find('list');
        $cars = $this->Booking->Car->find('list');
        $this->set(compact('users', 'cars'));
    }

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Booking->id = $id;
        if (!$this->Booking->exists()) {
            throw new NotFoundException(__('Invalid booking'));
        }
        if ($this->Booking->delete()) {
            $this->Session->setFlash(__('Booking deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Booking was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
