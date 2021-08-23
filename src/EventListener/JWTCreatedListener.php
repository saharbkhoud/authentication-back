<?php


namespace App\EventListener;
use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTAuthenticatedEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;

class JWTCreatedListener
{
     /**
     * Replaces the data in the generated
     *
     * @param JWTCreatedEvent $event
     *
     * @return void
     */
    public function onJWTCreated(JWTCreatedEvent $event)
    {
        /**
         * @var $user User
         */
        $user = $event->getUser();
        $payload  = $event->getData();
        // add new data
        $payload['email'] = $user->getEmail();
        $payload['id'] = $user->getId();
        $event->setData($payload);
    }
    /**
     * @param JWTAuthenticatedEvent $event
     *
     * @return void
     */
    public function onJWTAuthenticated(JWTAuthenticatedEvent $event)
    {
        $token = $event->getToken();
        $payload = $event->getPayload();
        $token->setAttribute('uuid', $payload['uuid']);
    }
}
