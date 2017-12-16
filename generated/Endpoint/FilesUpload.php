<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Endpoint;

class FilesUpload extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Uploads or creates a file.
     *
     * @param array $formParameters {
     *
     *     @var string $channels comma-separated list of channel names or IDs where the file will be shared
     *     @var string $title title of file
     *     @var string $initial_comment initial comment to add to file
     *     @var string $filetype a [file type](/types/file#file_types) identifier
     *     @var string $filename filename of file
     *     @var string $content File contents via a POST variable. If omitting this parameter, you must provide a `file`.
     *     @var string $token Authentication token. Requires scope: `files:write:user`
     *     @var string $file File contents via `multipart/form-data`. If omitting this parameter, you must submit `content`.
     * }
     */
    public function __construct(array $formParameters = [])
    {
        $this->formParameters = $formParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/files.upload';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getFormBody();
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['channels', 'title', 'initial_comment', 'filetype', 'filename', 'content', 'token', 'file']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('channels', ['string']);
        $optionsResolver->setAllowedTypes('title', ['string']);
        $optionsResolver->setAllowedTypes('initial_comment', ['string']);
        $optionsResolver->setAllowedTypes('filetype', ['string']);
        $optionsResolver->setAllowedTypes('filename', ['string']);
        $optionsResolver->setAllowedTypes('content', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);
        $optionsResolver->setAllowedTypes('file', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\FilesUploadPostResponse200|\JoliCode\Slack\Api\Model\FilesUploadPostResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesUploadPostResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\FilesUploadPostResponsedefault', 'json');
    }
}
