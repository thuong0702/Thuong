<?php
session_start();

// Khởi tạo giỏ hàng nếu chưa có
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Hàm thêm sản phẩm vào giỏ hàng
function addToCart($id, $name, $price, $quantity = 1) {
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$id] = [
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity
        ];
    }
}

// Hàm xóa sản phẩm khỏi giỏ hàng
function removeFromCart($id) {
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
}

// Hàm tính tổng giá trị giỏ hàng
function calculateTotal() {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

// Xử lý thêm sản phẩm vào giỏ hàng
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_to_cart'])) {
        addToCart($_POST['id'], $_POST['name'], $_POST['price'], $_POST['quantity']);
    }
    if (isset($_POST['remove_from_cart'])) {
        removeFromCart($_POST['id']);
    }
    header("Location: cart.php"); // Tránh submit lại form khi reload
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
</head>
<body>

<h1>Giỏ hàng của bạn</h1>

<!-- Form thêm sản phẩm vào giỏ hàng (dùng thử nghiệm) -->
<form action="cart.php" method="post">
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="name" value="Sản phẩm A">
    <input type="hidden" name="price" value="100000">
    Số lượng: <input type="number" name="quantity" value="1" min="1">
    <button type="submit" name="add_to_cart">Thêm Sản phẩm A</button>
</form>

<form action="cart.php" method="post">
    <input type="hidden" name="id" value="2">
    <input type="hidden" name="name" value="Sản phẩm B">
    <input type="hidden" name="price" value="200000">
    Số lượng: <input type="number" name="quantity" value="1" min="1">
    <button type="submit" name="add_to_cart">Thêm Sản phẩm B</button>
</form>

<!-- Hiển thị giỏ hàng -->
<?php if (!empty($_SESSION['cart'])): ?>
    <table border="1">
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng cộng</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($_SESSION['cart'] as $id => $item): ?>
            <tr>
                <td><?php echo htmlspecialchars($item['name']); ?></td>
                <td><?php echo number_format($item['price']); ?> VND</td>
                <td><?php echo $item['quantity']; ?></td>
                <td><?php echo number_format($item['price'] * $item['quantity']); ?> VND</td>
                <td>
                    <form action="cart.php" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit" name="remove_from_cart">Xóa</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><strong>Tổng cộng: <?php echo number_format(calculateTotal()); ?> VND</strong></p>
<?php else: ?>
    <p>Giỏ hàng trống!</p>
<?php endif; ?>

</body>
</html>
