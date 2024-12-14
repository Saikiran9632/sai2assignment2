<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';

    
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($dob)) {
       

        
        echo json_encode([
            'status' => 'success',
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'dob' => $dob
        ]);
    } else {
        
        echo json_encode(['status' => 'error']);
    }
} else {
   
    echo json_encode(['status' => 'error']);
}
?>
