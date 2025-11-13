# Single Responsibility Principle (SRP)

## Problem (Before)
The `OrderManager` class had three different responsibilities:
1. Managing orders
2. Processing payments
3. Sending notifications

This violates SRP because one class has multiple reasons to change. If the payment logic changes, or if the notification system changes, you'd need to modify `OrderManager`.

## Solution (After)
Split into three focused classes:
- `OrderManagement` - handles order processing only
- `PaymentProcessor` - handles payment logic only
- `NotificationService` - handles email notifications only

## Benefit
Each class now has **one reason to change**, making the code:
- **Easier to maintain** - changes are isolated to specific classes
- **Easier to test** - each class can be tested independently
- **More reusable** - payment and notification services can be used in other parts of the application
- **More flexible** - you can swap implementations without affecting the entire system