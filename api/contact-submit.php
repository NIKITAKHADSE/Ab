<?php
declare(strict_types=1); require_once dirname(__DIR__).'/includes/functions.php'; require_once dirname(__DIR__).'/includes/db.php';
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD']!=='POST' || !csrf_valid($_POST['csrf']??null)) { http_response_code(403); echo json_encode(['ok'=>false,'message'=>'Your session expired. Refresh and try again.']); exit; }
if (!empty($_POST['website'])) { echo json_encode(['ok'=>true,'message'=>'Thank you.']); exit; }
$name=trim($_POST['name']??''); $email=filter_var($_POST['email']??'',FILTER_VALIDATE_EMAIL); $phone=trim($_POST['phone']??''); $message=trim($_POST['message']??'');
if ($name==='' || !$email || $message==='') { http_response_code(422); echo json_encode(['ok'=>false,'message'=>'Please complete the required fields.']); exit; }
try { $stmt=db()->prepare('INSERT INTO contact_enquiries (name,email,phone,message,ip_hash) VALUES (?,?,?,?,?)'); $stmt->execute([$name,$email,$phone,$message,hash('sha256',$_SERVER['REMOTE_ADDR']??'')]); echo json_encode(['ok'=>true,'message'=>'Thank you. Your enquiry has been received.']); } catch(Throwable $e) { error_log($e->getMessage()); http_response_code(500); echo json_encode(['ok'=>false,'message'=>'We could not send your enquiry. Please try again later.']); }

