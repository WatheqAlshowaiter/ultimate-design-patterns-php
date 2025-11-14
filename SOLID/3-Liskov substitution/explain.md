# Liskov Substitution Principle (LSP)

## Problem (Before)
The `Order` base class defines a fixed `SHIPPING_COST` constant that applies to all order types.
However, different order types have different shipping requirements:
- `DeliveryOrder` - needs standard shipping cost
- `PickupOrder` - has zero shipping cost (customer picks up)

If code treats all `Order` objects the same way, it breaks because `PickupOrder` shouldn't have shipping charges. This violates LSP because a subclass doesn't properly substitute the parent class behavior.

This creates bugs where:
```
$order = new PickupOrder();
$total = $order->getTotalPrice(); // Incorrectly adds shipping cost!
```

## Solution (After)
1. Created a `ShippingCostCalculator` interface that allows different calculation strategies
2. Each order type implements this interface appropriately:
   - `DeliveryOrder` - implements interface and calculates shipping based on price
   - `PickupOrder` - can implement with 0 shipping cost
3. Order types are now substitutable without breaking expected behavior

## Benefit
- **Predictable Behavior** - Subclasses honor the contract of the parent class
- **No Surprises** - Any `Order` subclass can be used without unexpected side effects
- **Correct Calculations** - Different order types calculate shipping correctly based on their nature
- **Reliable Code** - No need for type checking before using orders; all behave predictably

## Example
Code can safely work with any `ShippingCostCalculator` without knowing the specific type:
```php
function getOrderTotal(Order $order): float
{
    if ($order instanceof ShippingCostCalculator) {
        return $order->calculateShippingCost();
    }
    return $order->price; // For pickup orders with no shipping
}
```
