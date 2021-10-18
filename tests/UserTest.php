<?php

class UserTest extends TestCase
{
    public function testUserPlan()
    {
        $userId = 22;
        $this->json('GET', "/v1/users/{$userId}/plan", ['Accept' => 'application/json'])
            ->seeJson([
                "data" => [
                    "user" => [
                        "id" => $userId,
                        "name" => "user{$userId}",
                        "email"=>"user_{$userId}@gmail.com",
                        "fid" => 1002,
                        "gid" => "",
                    ],
                    "plan" => "monthly",
                    "fee" => 10
                ],
                "error" => null
            ]);
    }
}
// vendor/bin/phpunit test
// vendor/bin/phpunit --filter=testUserPlan
