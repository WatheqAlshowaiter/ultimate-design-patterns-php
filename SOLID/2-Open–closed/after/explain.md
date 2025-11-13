use Open-closed principle by extracting `PaymentProcessor` logic into a PaymentStrategy interface, and all available
payment strategies are implemeting this interface.

Then no need to switch statement in `PaymentProcessor` anymore.

Now in `ConsumerController` you can use `PaymentProcessor` and pass any strategy concrete class you want. and if you
want to add a new payment strategy, you just need to implement the interface, and just inject it into `PaymentProcessor`
in the consumer controller.