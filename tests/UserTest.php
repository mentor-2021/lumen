<?php

class UserTest extends TestCase
{
    public function testUserPlan()
    {
        $this->json('GET', '/v1/users/10/plan', ['Accept' => 'application/json'])
            ->seeJson([
                "data" => [
                    "user" => [
                        "id" => 10,
                        "name" => "user10",
                        "email"=>"user_10@gmail.com"
                    ],
                    "plan" => "monthly",
                    "fee" => 10
                ],
                "error" => null
            ]);
    }
}

// vendor/bin/phpunit --filter=testUserPlan
