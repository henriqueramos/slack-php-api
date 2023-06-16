<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api\Endpoint;

class ConversationsInviteShared extends \JoliCode\Slack\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Slack\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Slack\Api\Runtime\Client\EndpointTrait;

    /**
     * Invites users to a channel using InviteShared.
     *
     * @param array $formParameters {
     *     @var string $channel the ID of the public or private channel to invite user(s) to
     *     @var array $emails Optional emails to receive this invite. Either emails or user_ids must be provided.
     *     @var array $user_ids Optional user_ids to receive this invite. Either emails or user_ids must be provided.
     *     @var bool $external_limited Optional boolean on whether invite is to a external limited member. Defaults to true.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $token Authentication token. Requires Bot scopes: `conversations.connect:write` `groups:write` `mpim:write` `im:write`
     * }
     */
    public function __construct(array $formParameters = [], array $headerParameters = [])
    {
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/conversations.inviteShared';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getFormBody();
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['slackAuth'];
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['channel', 'emails', 'user_ids', 'external_limited']);
        $optionsResolver->setRequired(['channel']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('channel', ['string']);
        $optionsResolver->addAllowedTypes('emails', ['string']);
        $optionsResolver->addAllowedTypes('user_ids', ['string']);
        $optionsResolver->addAllowedTypes('external_limited', ['bool']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Slack\Api\Model\ConversationsInviteSharedPostResponse200|\JoliCode\Slack\Api\Model\ConversationsInviteSharedPostResponsedefault|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ConversationsInviteSharedPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\ConversationsInviteSharedPostResponsedefault', 'json');
    }
}
