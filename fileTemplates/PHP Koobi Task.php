<?php

namespace App\Domain\Process\Step\TaskDefinition;

class ${NAME} extends BaseTaskDefinition
{
    /** @var string */
    public const NAME = '${STEP_UNDERSCORED}.${NAME_UNDERSCORED}';

    /**
     * @return TaskDefinition|null
     */
    public function nextTaskDefinition(): ?TaskDefinition
    {
        return null;
    }

    /**
     * @return \DateInterval
     * @throws \Exception
     */
    public function dueDatePeriod(): \DateInterval
    {
        return new \DateInterval('${DUE_DATE}');
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return self::NAME;
    }
}
