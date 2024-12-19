<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class Pledge
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Amount pledged towards the issue
     *
     * @var int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

    /**
     *
     * @var string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public string $currency;

    /**
     *
     * @var PledgeState $state
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('state')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\PledgeState')]
    public PledgeState $state;

    /**
     *
     * @var PledgeType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\PledgeType')]
    public PledgeType $type;

    /**
     *
     * @var Issue $issue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('issue')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Issue')]
    public Issue $issue;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * If and when the pledge was refunded to the pledger
     *
     * @var ?\DateTime $refundedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refunded_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $refundedAt = null;

    /**
     * When the payout is scheduled to be made to the maintainers behind the issue. Disputes must be made before this date.
     *
     * @var ?\DateTime $scheduledPayoutAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scheduled_payout_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $scheduledPayoutAt = null;

    /**
     * The user or organization that made this pledge
     *
     * @var ?Pledger $pledger
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pledger')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Pledger|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Pledger $pledger = null;

    /**
     * URL of invoice for this pledge
     *
     * @var ?string $hostedInvoiceUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hosted_invoice_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $hostedInvoiceUrl = null;

    /**
     * For pledges made by an organization, or on behalf of an organization. This is the user that made the pledge. Only visible for members of said organization.
     *
     * @var ?Pledger $createdBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Pledger|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Pledger $createdBy = null;

    /**
     * If the currently authenticated subject can perform admin actions on behalf of the maker of the peldge
     *
     * @var ?bool $authedCanAdminSender
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authed_can_admin_sender')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $authedCanAdminSender = null;

    /**
     * If the currently authenticated subject can perform admin actions on behalf of the receiver of the peldge
     *
     * @var ?bool $authedCanAdminReceived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authed_can_admin_received')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $authedCanAdminReceived = null;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  int  $amount
     * @param  string  $currency
     * @param  PledgeState  $state
     * @param  PledgeType  $type
     * @param  Issue  $issue
     * @param  ?\DateTime  $modifiedAt
     * @param  ?bool  $authedCanAdminSender
     * @param  ?bool  $authedCanAdminReceived
     * @param  ?\DateTime  $refundedAt
     * @param  ?\DateTime  $scheduledPayoutAt
     * @param  ?Pledger  $pledger
     * @param  ?string  $hostedInvoiceUrl
     * @param  ?Pledger  $createdBy
     */
    public function __construct(\DateTime $createdAt, string $id, int $amount, string $currency, PledgeState $state, PledgeType $type, Issue $issue, ?\DateTime $modifiedAt = null, ?\DateTime $refundedAt = null, ?\DateTime $scheduledPayoutAt = null, ?Pledger $pledger = null, ?string $hostedInvoiceUrl = null, ?Pledger $createdBy = null, ?bool $authedCanAdminSender = false, ?bool $authedCanAdminReceived = false)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->state = $state;
        $this->type = $type;
        $this->issue = $issue;
        $this->modifiedAt = $modifiedAt;
        $this->refundedAt = $refundedAt;
        $this->scheduledPayoutAt = $scheduledPayoutAt;
        $this->pledger = $pledger;
        $this->hostedInvoiceUrl = $hostedInvoiceUrl;
        $this->createdBy = $createdBy;
        $this->authedCanAdminSender = $authedCanAdminSender;
        $this->authedCanAdminReceived = $authedCanAdminReceived;
    }
}