# Transaction API

## Get Transactions

This method allows you to get a list of all transactions on an account. 

```php
$transactionPayload = [
   'wallet' => 'xxxxxxxxx',
   "perPage": 50,
   "page": 3
];

$transactions = TerminalAfrica::getTransactions($transactionPayload);
```

## Get Transaction

This method allows you to retrieve details for a transaction.

```php
$transactionId = 'xxxxxxxxx';
$transaction = TerminalAfrica::getTransaction($transactionId);
```