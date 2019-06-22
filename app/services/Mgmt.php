<?php

namespace App;

final class Mgmt extends App {

  public function home($request, $response) {
    if (!isset($_SESSION['user_id'])) {
      unset($_SESSION['loggedIn']);
      session_destroy();
      return $response->withRedirect('/');
    }

    if (!isset($_SESSION['evento_id']) || !isset($_SESSION['role'])) {      
      return $response->withRedirect('/roleselect');
    }

    $vars['user_id'] = $_SESSION['user_id'];
    $vars['username'] = $_SESSION['username'];
    $vars['evento_id'] = $_SESSION['evento_id'];
    $vars['eventoname'] = $_SESSION['eventoname'];

    $response = $this->view->render($response, "mgmt.phtml", $vars);

    return $response;
  }
}


?>