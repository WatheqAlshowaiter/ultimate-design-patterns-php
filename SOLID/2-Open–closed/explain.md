# Open-Closed Principle (OCP)

## Problem (Before)
The `PaymentProcessor` class used a switch statement to handle different payment types (Visa, MasterCard, AmEx).
Every time you want to add a new payment method, you must **modify the existing `PaymentProcessor` class**.

This violates OCP because the class is not closed for modification.

## Solution (After)
1. Created a `PaymentStrategy` interface that defines the payment processing contract
2. Each payment type implements this interface:
   - `VisaPaymentStrategy`
   - `MasterCardPaymentStrategy`
   - `AmericanExpressPaymentStrategy`
3. `PaymentProcessor` accepts any strategy through dependency injection

## Benefit
- **Open for Extension** - Add new payment methods without modifying existing code
- **Closed for Modification** - The `PaymentProcessor` class never needs to change when adding new payment types
- **No switch statements** - Cleaner, more maintainable code

## Example
To add PayPal support, simply create `PaypalPaymentStrategy` implementing `PaymentStrategy` and inject it:
```php
$paymentProcessor = new PaymentProcessor(new PaypalPaymentStrategy());
$paymentProcessor->processPayment($order);
```