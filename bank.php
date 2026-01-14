<!---Marcelino, Princess Camille
CYB 201
JAN 14, 2026--->
<?php
include 'includes/header.php';
include 'classes/Account.php';
include 'classes/Customer.php';
$accnts = [
    new Account(111111, 'Savings', 50000.75),
    new Account(222222, 'Checking', 2500.00),
    new Account(333333, 'Investment', 5000.00),
    new Account(444444, 'Education', 15000.00)
];
$accnts[0]->deposit(5500.32);
$accnts[1]->withdraw(2700.45);
$accnts[2]->deposit(10000.55);
$accnts[3]->withdraw(3000.45);
$customer = new Customer('Princess Camille', 'Marcelino', 'marcelinoprincesscamille@gmail.com', $accnts);
?>
<h2>Customer: <?php echo $customer->getFullName(); ?></h2>
<h2>EMAIL: <?php echo $customer->email;?></h2>
<table>
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
    </tr>
    <?php foreach ($customer->accounts as $account) { ?>
        <tr>
            <td><?= $account->number; ?></td>
            <td><?= $account->type; ?></td>   
            <?php if ($account->balance >= 0) { ?>
                <td class='credit'>₱ <?=($account->balance); ?></td>
            <?php } else { ?>
                <td class='overdrawn'>₱ <?=($account->balance); ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<?php include 'includes/footer.php'; ?>