<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Endpoint;

class MpimHistory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Fetches history of messages and events from a multiparty direct message.
     *
     * @param array $queryParameters {
     *
     *     @var int $count number of messages to return, between 1 and 1000
     *     @var bool $unreads Include `unread_count_display` in the output?
     *     @var bool $inclusive include messages with latest or oldest timestamp in results
     *     @var string $token Authentication token. Requires scope: `mpim:history`
     *     @var float $oldest start of time range of messages to include in results
     *     @var string $channel multiparty direct message to fetch history for
     *     @var float $latest end of time range of messages to include in results.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/mpim.history';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['count', 'unreads', 'inclusive', 'token', 'oldest', 'channel', 'latest']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('count', ['int']);
        $optionsResolver->setAllowedTypes('unreads', ['bool']);
        $optionsResolver->setAllowedTypes('inclusive', ['bool']);
        $optionsResolver->setAllowedTypes('token', ['string']);
        $optionsResolver->setAllowedTypes('oldest', ['float']);
        $optionsResolver->setAllowedTypes('channel', ['string']);
        $optionsResolver->setAllowedTypes('latest', ['float']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\MpimHistoryGetResponse200|\JoliCode\Slack\Api\Model\MpimHistoryGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\MpimHistoryGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\MpimHistoryGetResponsedefault', 'json');
    }
}
