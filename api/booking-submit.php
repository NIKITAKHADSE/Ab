<?php
declare(strict_types=1); require_once dirname(__DIR__).'/includes/functions.php'; require_once dirname(__DIR__).'/includes/db.php';
if ($_SERVER['REQUEST_METHOD']!=='POST' || !csrf_valid($_POST['csrf']??null)) { http_response_code(403); exit('Invalid session.'); }
if (!empty($_POST['website'])) { header('Location: ../index.php'); exit; }
$allowed=['studio','premium','suite','long']; $stay=$_POST['stay_type']??''; $in=$_POST['check_in']??''; $out=$_POST['check_out']??''; $guests=(int)($_POST['guests']??0); $name=trim($_POST['name']??''); $email=filter_var($_POST['email']??'',FILTER_VALIDATE_EMAIL); $phone=trim($_POST['phone']??''); $requests=trim($_POST['requests']??'');
if (!in_array($stay,$allowed,true) || !$email || $name==='' || $phone==='' || $guests<1 || !strtotime($in) || !strtotime($out) || $out<=$in) { http_response_code(422); exit('Please check your enquiry details.'); }
$ref=reference_code();
try { $stmt=db()->prepare('INSERT INTO booking_enquiries (reference_code,stay_type,check_in,check_out,guests,name,email,phone,special_requests,ip_hash) VALUES (?,?,?,?,?,?,?,?,?,?)'); $stmt->execute([$ref,$stay,$in,$out,$guests,$name,$email,$phone,$requests,hash('sha256',$_SERVER['REMOTE_ADDR']??'')]); header('Location: ../booking-confirmation.php?ref='.rawurlencode($ref)); } catch(Throwable $e) { error_log($e->getMessage()); http_response_code(500); exit('We could not save your enquiry. Please try again later.'); }

