<?php

describe("Spec", function() {

    $value = "hello";

    it("should have value", function() {
        assert($value == "hello", "there should be value");
    });

    it("should have a passing spec", function() {
    });

    xit("should have a failing spec", function() {
        throw new Exception("failure");
    });

    it("should be pending");

    beforeEach(function() {
       $thing = new ArrayObject();
    });

    describe('A nested suite', function() {

        beforeEach(function() {
            $thing->append('hello');
        });

        beforeEach(function() {
            $thing->append('goodbye');
        });

        it('should have access to thing', function() {
            assert($thing[0] == "hello", 'hello should be a thing');
            assert($thing[1] == "goodbye", "goodbye should be a thing");
        });
    });
});
