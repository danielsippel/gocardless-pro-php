<?php
//
// WARNING: Do not edit by hand, this file was generated by Crank:
// https://github.com/gocardless/crank
//

namespace GoCardlessPro\Integration;

class RefundsTest extends IntegrationTestBase
{
    public function setUp()
    {
        $this->clientAndFixtureSetup('refunds');
    }

    public function testResourceExists()
    {
        $obj = new \GoCardlessPro\Resources\Refund(null);
        $this->assertNotNull($obj);
    }

    public function testRefundsCreate()
    {
        $fixture = $this->stubResponse('create');

        $func_array = array_values((array) $fixture->url_params);
        $resourceService = $this->client->refunds();
        $response = call_user_func_array(array($resourceService, 'create'), $func_array);

        $body = $fixture->body->refunds;

    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Refund', $response);

        $this->matchDeepResponse($body->amount, $response->amount());
        $this->matchDeepResponse($body->created_at, $response->created_at());
        $this->matchDeepResponse($body->currency, $response->currency());
        $this->matchDeepResponse($body->id, $response->id());
        $this->matchDeepResponse($body->links, $response->links());
        $this->matchDeepResponse($body->metadata, $response->metadata());
    

        $this->assertTrue($this->hasCheckedCurl);
    }

    public function testRefundsList()
    {
        $fixture = $this->stubResponse('list');

        $func_array = array_values((array) $fixture->url_params);
        $resourceService = $this->client->refunds();
        $response = call_user_func_array(array($resourceService, 'list'), $func_array);

        $body = $fixture->body->refunds;

    
        $records = $response->records();
        $this->assertInstanceOf('\GoCardlessPro\Core\ListResponse', $response);
        $this->assertInstanceOf('\GoCardlessPro\Resources\Refund', $records[0]);

        $this->assertEquals($fixture->body->meta->cursors->before, $response->meta()->cursors()->before());
        $this->assertEquals($fixture->body->meta->cursors->after, $response->meta()->cursors()->after());
    

    
        foreach (range(0, count($body) - 1) as $num) {
            $record = $records[$num];
            $this->matchDeepResponse($body[$num]->amount, $record->amount());
            $this->matchDeepResponse($body[$num]->created_at, $record->created_at());
            $this->matchDeepResponse($body[$num]->currency, $record->currency());
            $this->matchDeepResponse($body[$num]->id, $record->id());
            $this->matchDeepResponse($body[$num]->links, $record->links());
            $this->matchDeepResponse($body[$num]->metadata, $record->metadata());
            
        }

        $this->assertTrue($this->hasCheckedCurl);
    }

    public function testRefundsGet()
    {
        $fixture = $this->stubResponse('get');

        $func_array = array_values((array) $fixture->url_params);
        $resourceService = $this->client->refunds();
        $response = call_user_func_array(array($resourceService, 'get'), $func_array);

        $body = $fixture->body->refunds;

    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Refund', $response);

        $this->matchDeepResponse($body->amount, $response->amount());
        $this->matchDeepResponse($body->created_at, $response->created_at());
        $this->matchDeepResponse($body->currency, $response->currency());
        $this->matchDeepResponse($body->id, $response->id());
        $this->matchDeepResponse($body->links, $response->links());
        $this->matchDeepResponse($body->metadata, $response->metadata());
    

        $this->assertTrue($this->hasCheckedCurl);
    }

    public function testRefundsUpdate()
    {
        $fixture = $this->stubResponse('update');

        $func_array = array_values((array) $fixture->url_params);
        $resourceService = $this->client->refunds();
        $response = call_user_func_array(array($resourceService, 'update'), $func_array);

        $body = $fixture->body->refunds;

    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Refund', $response);

        $this->matchDeepResponse($body->amount, $response->amount());
        $this->matchDeepResponse($body->created_at, $response->created_at());
        $this->matchDeepResponse($body->currency, $response->currency());
        $this->matchDeepResponse($body->id, $response->id());
        $this->matchDeepResponse($body->links, $response->links());
        $this->matchDeepResponse($body->metadata, $response->metadata());
    

        $this->assertTrue($this->hasCheckedCurl);
    }
}