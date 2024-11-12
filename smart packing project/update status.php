<?php include 'config.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $db->prepare("UPDATE packages SET status = 'shipped' WHERE id = ?");
    $stmt->execute([$id]);

    echo "<script>alert('Status updated to shipped!'); window.location.href='view_packages.php';</script>";
} else {
    echo "<script>alert('No package ID provided.'); window.location.href='view_packages.php';</script>";
}
?>
