@extends('layouts.app')

@section('title', 'Cart')

@section('content')
    <main>
        <div class="container">
            <section class="vehicle-details">
                <img id="vehicle-image" src="" alt="Vehicle Image" class="vehicle-image">
                <div class="vehicle-info">
                    <h1 id="vehicle-name">Vehicle Name</h1>
                    <ul class="specs" id="vehicle-specs">
                        <!-- Vehicle specs will be populated here -->
                    </ul>
                    <p id="vehicle-price">Vehicle Price</p>
                </div>
            </section>

            <section class="addons">
                <h2>Add-ons</h2>
                <div class="addon-item">
                    <label>
                        <span>Liability Reduction Option (LRO) (per day)</span>
                        <span>MYR 30.00</span>
                        <input type="number" min="0" value="0">
                    </label>
                </div>
                <div class="addon-item">
                    <label>
                        <span>Additional Driver (per rental)</span>
                        <span>MYR 20.00</span>
                        <input type="number" min="0" value="0">
                    </label>
                </div>
                <div class="addon-item">
                    <label>
                        <span>Child Seat (Non-Isofix) (per day)</span>
                        <span>MYR 15.00</span>
                        <input type="number" min="0" value="0">
                    </label>
                </div>
            </section>

            <section class="travel-insurance">
                <h2>Buy Travel Insurance?</h2>
                <label>
                    <input type="radio" name="travel-insurance" value="no" checked> No
                </label>
                <label>
                    <input type="radio" name="travel-insurance" value="basic"> Z-Travel Insurance Basic
                </label>
                <label>
                    <input type="radio" name="travel-insurance" value="premium"> Z-Travel Insurance Premium
                </label>
                <div class="insurance-details">
                    <div class="insurance-basic">
                        <h3>Z-Travel Insurance Basic</h3>
                        <p>Accidental Death: Up to MYR 200,000.00</p>
                        <p>Medical Expenses: Up to MYR 5,000.00</p>
                    </div>
                    <div class="insurance-premium">
                        <h3>Z-Travel Insurance Premium</h3>
                        <p>Evacuation & Repatriation: UNLIMITED</p>
                        <p>Personal Liability: Up to MYR 500,000.00</p>
                        <p>Journey Cancellation: Up to MYR 500.00</p>
                        <p>Golf Equipment: Up to MYR 1,000.00</p>
                    </div>
                </div>
            </section>

            <section class="summary">
                <h2>Summary of Charges</h2>
                <p>Rental: MYR 425.00</p>
                <p>Pick Up Fee: MYR 40.00</p>
                <p>Return Fee: MYR 40.00</p>
                <p>Travel Insurance & Misc Fee: MYR 0.00</p>
                <p>Discount: MYR -0.00</p>
                <p>Membership Discount: MYR -0.00</p>
                <p>Total Amount: MYR 505.00</p>
                <p>Rounding: MYR 0.00</p>
                <p>Refundable Deposit: MYR 300.00</p>
                <p><strong>Grand Total: MYR 805.00</strong></p>
                <button>Next</button>
            </section>
        </div>
    </main>
@endsection