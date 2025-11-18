# Dependency Inversion Principle (DIP)

## Problem (Before)
The `PaymentProcessor` class **directly depends on concrete payment implementations** through a switch statement:
- It knows about specific payment types (VISA, MasterCard, AmEx)
- It hardcodes the logic for each payment type
- It's **tightly coupled** to these concrete implementations
- Adding a new payment method requires **modifying** the `PaymentProcessor` class

This violates DIP because:
- High-level modules (PaymentProcessor) depend on low-level modules (concrete payment types)
- The dependency direction is wrong - it should be reversed
- Changes in payment types force changes in PaymentProcessor

The "inversion" here refers to reversing the dependency direction from concrete to abstract.

## Solution (After)
Create an abstraction layer (`PaymentStrategy` interface) and **invert the dependency direction**:
1. Create `PaymentStrategy` interface that defines the payment contract
2. Concrete payment strategies implement this interface:
   - `VisaPaymentStrategy`
   - `MasterCardPaymentStrategy`
   - `AmericanExpressPaymentStrategy`
   - `PaypalPaymentStrategy`
3. `PaymentProcessor` depends on the `PaymentStrategy` abstraction (not concrete classes)
4. Strategy is **injected** into PaymentProcessor via constructor

Now:
- High-level modules depend on abstractions (`PaymentStrategy`)
- Low-level modules (concrete strategies) also depend on abstractions
- Both depend on the abstraction, not on each other

## Benefit
- **Loose Coupling** - PaymentProcessor is independent of concrete payment types
- **Easy to Extend** - Add new payment methods without modifying PaymentProcessor
- **Testable** - Can inject mock strategies for testing
- **Flexible** - Strategy can be changed at runtime via dependency injection
- **Clear Dependency Direction** - Dependencies point toward abstractions, not away from them

## Example
```php
// Before: Tightly coupled to concrete implementations
class PaymentProcessor {
    public function processPayment(Order $order, Payment $payment): void
    {
        switch ($payment->getType()) {
            case 'VISA':
                echo "Processing visa...";
                break;
            case 'Master_Card':
                echo "Processing mastercard...";
                break;
            default:
                throw new Exception("Unsupported type");
        }
    }
}

// After: Depends on abstraction, not concrete implementations
class PaymentProcessor
{
    public function __construct(
        public PaymentStrategy $paymentStrategy
    ) {
    }

    public function processPayment(Order $order): void
    {
        $this->paymentStrategy->processPayment($order->getPrice());
    }
}

// Easy to use with any strategy
$processor = new PaymentProcessor(new VisaPaymentStrategy());
$processor->processPayment($order);

// Easy to switch strategies
$processor = new PaymentProcessor(new PaypalPaymentStrategy());
$processor->processPayment($order);
```

## Key Insight
**Depend on abstractions, not on concretions.** Both high-level and low-level modules should depend on abstractions (interfaces/abstract classes), creating a dependency inversion where the flow of control depends on abstractions rather than concrete implementations.
