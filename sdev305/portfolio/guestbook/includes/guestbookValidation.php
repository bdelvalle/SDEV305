<?php



function validNames($data) {
    if (empty($data)) {
        return false;
    } else {
        return preg_match("/^[a-zA-z-' ]*$/", ($data));
    }
}

function validText($data) {
    if (empty($data)) {
        return true;
    } else {
        return preg_match("/^[0-9a-zA-z-' ]*$/" , ($data));
    }
}

function validEmail($data) {
    if (empty($data)) {
        return true;
    } else {
        return filter_var($data, FILTER_VALIDATE_EMAIL);
    }
}

function validURL($data) {
    if (empty($data)) {
        return true;
    }

    else {
        return filter_var($data, FILTER_VALIDATE_URL);
    }
}

function validMet($data) {
    if (empty($data)) {
        return false;
    } else {
        $validMets = ['placeholder', 'meetup', 'jobfair', 'class', 'other', 'nomeet'];
        return array_search($data, $validMets);
    }

}
