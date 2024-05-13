<?php

class Tasks extends Controller
{
  public function index()
  {
    $x = new User();
    $rows = $x->findAll();

    $this->view('tasks/index', ['users' => $rows]);
  }

  public function create()
  {
    $x = new User();

    if (isset($_POST['create'])) {

      $arr['task_name'] = $_POST['task_name'];
      $arr['task_description'] = $_POST['task_description'];
      $arr['task_status'] = $_POST['task_status'];
      $arr['task_due'] = $_POST['task_due'];

      $x->insert($arr);

      redirect('tasks');
    }

    $this->view('tasks/create');
  }

  public function update()
  {
    $x = new User();

    if(isset($_POST['btnedit']))
    {
      $id['id'] = $_POST['editid'];
      $rows = $x->where($id);
      // show($rows);

      $this->view('tasks/update', ['users' => $rows]);
    }
    
    if (isset($_POST['update'])) 
    {
      $id = $_POST['id'];
      $arr['task_name'] = $_POST['task_name'];
      $arr['task_description'] = $_POST['task_description'];
      $arr['task_status'] = $_POST['task_status'];
      $arr['task_due'] = $_POST['task_due'];

      $x->update($id, $arr);

      redirect('tasks');
    }
    
  }


  public function delete()
  {
    $x = new User;

    if(isset($_POST['delete']))
    {
      $id = $_POST['deleteid'];
      $rows = $x->delete($id);
    }

    // $x->delete(2);
    
    $this->view('tasks/delete', ['users' => $rows]);

    redirect('tasks');
  }
  
}
