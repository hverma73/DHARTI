<?php
    function checkLogin() {
        $CI = & get_instance();
        if ($user_info = $CI->session->userdata('userData')) {
            $user_info = $CI->session->userdata('userData');
            if ($user_info) {
                // $CI->session->set_flashdata('alertMsg', 'You are not authorized to see this area.');
                // redirect('home/login');
            }
        } else {
            $CI->session->set_flashdata('alertMsg', 'You are not authorized to see this area.');
            redirect('home/login');
        }
    }

function doUploadFile($file = 'file', $path = '../assets/uploads/profilePicture/', $myConfig = array())
{
    $CI = &get_instance();
    $config = array();
    $config['upload_path'] = $path;
    if (isset($myConfig['allowed_types']))
        $config['allowed_types'] = $myConfig['allowed_types'];
    else
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
    //$config['allowed_types'] = 'xls|xlsx';
    if (isset($myConfig['max_size']))
        $config['max_size'] = $myConfig['max_size'];
    else
        $config['max_size'] = '20000';

    if (isset($myConfig['max_width']))
        $config['max_width'] = $myConfig['max_width'];
    else
        $config['max_width'] = '10000';

    if (isset($myConfig['max_height']))
        $config['max_height'] = $myConfig['max_height'];
    else
        $config['max_height'] = '50000';
    $config['remove_spaces'] = TRUE;
    // $this->load->library('upload', $config);
    $CI->upload->initialize($config);
    if (!$CI->upload->do_upload($file)) {
        return array('status' => FALSE, 'error' => $CI->upload->display_errors());
    } else {
        return array('status' => TRUE, 'uploadData' => $CI->upload->data());
    }
}

?>