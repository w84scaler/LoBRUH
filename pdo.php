<?php

$db = new PDO('mysql:host=localhost;dbname=lobruh', 'root', 'phpmybruh');

function get_user_comments($db, $user_id) {
    try {
        $stmt = $db->prepare("SELECT * FROM comment WHERE author_id = ?");
        $stmt->execute(array($user_id));
        $i = 0;
        while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
            $res[$i] = array('name' => get_page_name($db, $row['page_id']), 'time' => $row['time'], 'text' =>$row['text']);
            $i++;
        }
        return $res;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function get_page_name($db, $page_id) {
    try {
        $stmt = $db->prepare("SELECT head FROM champion WHERE id = ?");
        $stmt->execute(array($page_id));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $res = $row['head'];
        return $res;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function get_champ_desc($db, $page_id) {
    try {
        $stmt = $db->prepare("SELECT description FROM champion WHERE id = ?");
        $stmt->execute(array($page_id));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $res = $row['description'];
        return $res;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function get_champ_name($db, $page_id) {
    try {
        $stmt = $db->prepare("SELECT name FROM champion WHERE id = ?");
        $stmt->execute(array($page_id));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $res = $row['name'];
        return $res;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function get_user_name($db, $user_id) {
    try {
        $stmt = $db->prepare("SELECT name FROM user WHERE id = ?");
        $stmt->execute(array($user_id));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $res = $row['name'];
        return $res;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function get_page_comments($db, $page_id) {
    try {
        $stmt = $db->prepare("SELECT * FROM comment WHERE page_id = ?");
        $stmt->execute(array($page_id));
        $i = 0;
        while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
            $res[$i] = array('author' => get_user_name($db, $row['author_id']), 'time' => $row['time'], 'text' =>$row['text']);
            $i++;
        }
        return $res;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function get_champ_skills($db, $page_id) {
    try {
        $stmt = $db->prepare("SELECT * FROM skill WHERE champ_id = ?");
        $stmt->execute(array($page_id));
        while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
            $res[$row['num']] = array('num' => $row['num'], 'id' => $row['id'], 'name' => $row['name'], 'description' =>$row['description']);
        }
        sort($res);
        return $res;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function get_champ_skins($db, $page_id) {
    try {
        $stmt = $db->prepare("SELECT * FROM skin WHERE champ_id = ?");
        $stmt->execute(array($page_id));
        while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
            $res[$row['id']] = array('id' => $row['id'], 'name' => $row['name']);
        }
        sort($res);
        return $res;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function get_skin_name($db, $champ_id, $skin_id) {
    try {
        $stmt = $db->prepare("SELECT name FROM skin WHERE champ_id = ? and id = ?");
        $stmt->execute(array($champ_id, $skin_id));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $res = $row['name'];
        return $res;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function get_skins_amount($db, $champ_id){
    try {
        $stmt = $db->prepare("SELECT count(*) AS num FROM skin WHERE champ_id = ?");
        $stmt->execute(array($champ_id));
        $info = $stmt->fetch(PDO::FETCH_ASSOC);
        return $info['num'];
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function build_sorter($key) {
    return function ($a, $b) use ($key) {
        return strnatcmp($a[$key], $b[$key]);
    };
}

function get_champ_list($db){
    try {
        $stmt = $db->prepare("SELECT * FROM champion");
        $stmt->execute();
        $i = 0;
        while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
            $res[$i] = array('id' => $row['id'], 'name' => $row['name']);
            $i++;
        }
        usort($res, build_sorter('name'));
        return $res;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function put_comment($db, $text, $user_id, $page_id, $time){
    try {
        $stmt = $db->prepare("INSERT INTO `comment` (`text`, `time`, `author_id`, `id`, `page_id`) VALUES (?, ?, ?, NULL, ?)");
        $stmt->execute(array($text, $time, $user_id, $page_id));    
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}