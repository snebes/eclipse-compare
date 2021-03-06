<?php
/**
 * (c) Steve Nebes <snebes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SN\RangeDifferencer\Tag;

/**
 * A unit of comparison between html files. An Atom can be equal to another while not having the same text (tag
 * arguments). In that case the Atom will have internal identifiers that can be compared on a second level.
 */
interface AtomInterface
{
    /**
     * @return string
     */
    public function getIdentifier(): string;

    /**
     * @return bool
     */
    public function hasInternalIdentifiers(): bool;

    /**
     * @return string
     */
    public function getInternalIdentifiers(): string;

    /**
     * @return string
     */
    public function getFullText(): string;

    /**
     * @param string $s
     * @return bool
     */
    public function isValidAtom(string $s): bool;

    /**
     * @param AtomInterface $other
     * @return bool
     */
    public function equalsIdentifier(AtomInterface $other): bool;
}
