// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0
/*
 * Test types are indicated by the test label ending.
 *
 * _1_ Requires credentials, permissions, and AWS resources.
 * _2_ Requires credentials and permissions.
 * _3_ Does not require credentials.
 *
 */

#include <gtest/gtest.h>
#include "sns_samples.h"
#include "sns_gtests.h"

namespace AwsDocTest {
    // NOLINTNEXTLINE(readability-named-parameter)
    TEST_F(SNS_GTests, unsubscribe_2_) {
        Aws::String testSubscriptionARN = getSubscriptionARN();
        ASSERT_FALSE(testSubscriptionARN.empty()) << preconditionError() << std::endl;

        auto result = AwsDoc::SNS::unsubscribe(testSubscriptionARN, *s_clientConfig);
        ASSERT_TRUE(result);
    }

} // namespace AwsDocTest
