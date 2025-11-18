# Interface Segregation Principle (ISP)

## Problem (Before)
The `UserManagement` interface defined four methods that all user types must implement:
1. `subscribeToNewProductAvailability()` - notification method
2. `subscribeToSmsNotification()` - notification method
3. `updateUserProfile()` - profile management method
4. `changePassword()` - profile management method

Both `Customer` and `Subscriber` classes implement this interface, but:
- `Subscriber` only needs the subscription methods
- `Subscriber` is forced to implement empty methods for `updateUserProfile()` and `changePassword()` that it doesn't use

This violates ISP because clients are forced to depend on methods they don't need, leading to **fat interfaces** and wasted implementations.

## Solution (After)
Split the bloated `UserManagement` interface into smaller, segregated interfaces:
1. `UserManagement` - contains only profile management methods:
   - `updateUserProfile()`
   - `changePassword()`
2. `NotificationService` - contains only notification methods:
   - `subscribeToNewProductAvailability()`
   - `subscribeToSmsNotification()`

Now:
- `Customer` implements **both** interfaces (needs both functionalities)
- `Subscriber` implements **only** `NotificationService` (only needs notification functionality)

## Benefit
- **No Forced Implementations** - Classes only implement what they actually need
- **Cleaner Interfaces** - Interfaces are smaller and focused on specific functionality
- **Better Maintainability** - Changes to one aspect don't require changes to unrelated classes
- **More Flexible** - Easy to add new user types that only need specific functionalities
- **Reduced Coupling** - Classes depend only on methods they actually use

## Example
```php
// Before: Subscriber forced to implement unused methods
class Subscriber implements UserManagement
{
    public function updateUserProfile($user): void
    {
        // Empty - not needed for subscribers
    }

    public function changePassword($user, string $password): void
    {
        // Empty - not needed for subscribers
    }
}

// After: Subscriber implements only what it needs
class Subscriber implements NotificationService
{
    public function subscribeToNewProductAvailability(): void
    {
        // Implementation
    }

    public function subscribeToSmsNotification(): void
    {
        // Implementation
    }
}
```
